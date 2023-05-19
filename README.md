# TYPO3 Cat Stack Demo

A quick demo for TYPO3CMS with Fluid Components, AlpineJS (or petite-vue) and TailwindCSS.

<img src='./typo3-cat-stack.png' width='400' alt="Annotated screenshot">

[Open with Gitpod](https://gitpod.io/#https://github.com/fgeierst/typo3-11-tailwind-demo/)


## Prerequisites

- Docker Desktop
- DDEV


## Local installation guide

	git clone https://github.com/fgeierst/typo3-11-tailwind-demo.git
	cd typo3-11-tailwind-demo
	ddev start
	ddev composer install
	ddev snapshot restore --latest
	ddev npm install
	
Login via [typo3-11-tailwind-demo.ddev.site/typo3](typo3-11-tailwind-demo.ddev.site/typo3) using these credentials:

- Username: `admin`
- Password: `password`


## Start TailwindCSS and Rollup watchers in development

	ddev npm run css:dev 
	ddev npm run js:dev 

*Note*: If using DDEV make sure to have [Mutagen](https://ddev.readthedocs.io/en/latest/users/install/performance/#mutagen) enabled for the file watcher to work properly. If not, you can also run the above script outside of the docker container (`npm run css:dev`).

## Build JS and CSS for production

	ddev npm run css:build &&
	ddev npm run js:build

## Fluid Components

The UI components are encapsulated as [Fluid Components](https://github.com/sitegeist/fluid-components), located in the *Private/Components/* folder. Using fixture JSON files, you can work on individual components in isolation (similar to Storybook). The component explorer is at https://typo3-11-tailwind-demo.ddev.site/styleguide/

## Reactivity

Petite-vue is mounted on elements with the attribute `data-reactive`. See the [petite-vue Documentation](https://github.com/vuejs/petite-vue).

You can pass data from TYPO3 Fluid (server side rendering) to petite-vue (client side rendering). In this [example](packages/tailwind_demo_base/Resources/Private/Components/Navigation/Navigation.html) the TYPO3 Fluid variable `{menu}` contains an array of menu items from the TYPO3 MenuProcessor. On the server, it's rendered as a JavaScript object into the `v-scope` attribute. In the browser this value is picked up by petite-vue and used to render list items and links. We use square brackets as delimiters for petite-vue `[ item.title ]` to not get confused with Fluid's angle bracket syntax `{f:format.json()}`.

```html
<ul data-reactive v-scope='{f:format.json(value: {menu: menu})}'>
	<li v-for="item in menu">
		<a :href="item.link">
			[ item.title ]
		</a>
	</li>
</ul>f
```
