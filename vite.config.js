import { defineConfig } from "vite";

export default defineConfig({
	base: '',
	css: {
		preprocessorOptions: {
			scss: {
				api: "modern-compiler",
				silenceDeprecations: [
					'import',
					'global-builtin',
					'mixed-decls'
				],
				quietDeps: true
			},
		},
	},
	build: {
		// generate manifest.json in outDir
		manifest: true,
		sourcemap: true,
		rollupOptions: {
			input: {
				style: "src/scss/admin.scss",
				style_critical: "src/scss/tfa-theme-critical.scss",
				js_front: "src/js/app.js",
				style_admin: "src/scss/tfa-theme-main.scss",
				js_admin: "src/js/admin.js"
			},
		},
	},
	server: {
		hmr: false,
	},
});