# TYPO3 Cat Stack Demo

A quick demo for TYPO3CMS with Fluid Components, AlpineJS (or petite-vue) and TailwindCSS.

- Open with Gitpod https://gitpod.io#snapshot/d3249d54-1f0f-4211-8f98-b19b372d26ea

## Prerequisites

- Docker Desktop
- DDEV


## Local installation guide

	git clone https://github.com/fgeierst/typo3-11-tailwind-demo.git
	cd typo3-11-tailwind-demo
	ddev start
	ddev composer install
	ddev snapshot restore
    ddev npm install
	
Login via [typo3-11-tailwind-demo.ddev.site/typo3](typo3-11-tailwind-demo.ddev.site/typo3) using these credentials:

- Username: `admin`
- Password: `password`


## Start TailwindCSS and Rollup watchers in development

	ddev npm run css:dev 
    ddev npm run js:dev 

## Build JS and CSS for production

	ddev npm run css:build
    ddev npm run js:build