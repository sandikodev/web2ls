# WEB2LS - Many Tools You CAN Get!
Now arise with Qwik App! powered by Builder.IO


## TO-DO
furthermore, always check `Project Board` !


## Contribution ?
feel free to contribute your idea here! within learn qwik-app togerher!

## How to Contribute
1. fork this project
2. create pages for your own tools on `src/route` folder
3. push your project
4. create pull-request with several `key-val paired` requirement


for details, please check on `wiki tabs`


**tldr**\ if you need deploy .env key-val please let me know via our secured form below. `nb: sorry, the form still work in project`

## ROADMAP
1. build and deployed on Heroku (then)\
   a. tech stack: 
   ```
   lang: PHP,
   services: {
      ssr: "Silex"
   }
   ```
   b. tools: 
   ```
   [
      samehadaku downloader,
      snmptn generator,
      and more
   ]
   ```
2. re-build and deployed (now: work in progress)\
   a. tech stack: 
   ```
   lang: JS,
   services: {
      csr: "QwikJS",
      ssr: "QwikCity"
   }
   ```
   b. tools:
   ```
   [
      countdown timers,
      so on...
   ]
   ```
3. responsive mobile friendly (soon)


   `we'll be add your tools/idea there, after you done with your PR, Have a Great Day! `
   

## Preview
![IMG-1](/preview/prev-1.png "Screen Shot 2019-03-22 at 07.05.59")
![IMG-2](/preview/prev-2.png "Screen Shot 2019-03-22 at 07.07.29")


## Tips
1. we encourage you to use `bun` as development environment
2. use tailwind for most basic css usage, keep it simple
3. how if we need pre/post-processor ? let's discussed this together
4. keep in mind, sometimes sizes is matter.. don't get hurt anyone, don't get hurt the server's
   ![IMG-2](/preview/docs/size-is-matter.jpg "Keep it Simple and Slim")

## Vercel Edge

This starter site is configured to deploy to [Vercel Edge Functions](https://vercel.com/docs/concepts/functions/edge-functions), which means it will be rendered at an edge location near to your users.

## Installation

The adaptor will add a new `vite.config.ts` within the `adapters/` directory, and a new entry file will be created, such as:

```
└── adapters/
    └── vercel-edge/
        └── vite.config.ts
└── src/
    └── entry.vercel-edge.tsx
```

Additionally, within the `package.json`, the `build.server` script will be updated with the Vercel Edge build.

## Production build

To build the application for production, use the `build` command, this command will automatically run `bun build.server` and `bun build.client`:

```shell
bun build
```

[Read the full guide here](https://github.com/BuilderIO/qwik/blob/main/starters/adapters/vercel-edge/README.md)

## Dev deploy

To deploy the application for development:

```shell
bun deploy
```

Notice that you might need a [Vercel account](https://docs.Vercel.com/get-started/) in order to complete this step!

## Production deploy

The project is ready to be deployed to Vercel. However, you will need to create a git repository and push the code to it.

You can [deploy your site to Vercel](https://vercel.com/docs/concepts/deployments/overview) either via a Git provider integration or through the Vercel CLI.

## Vercel Edge

This starter site is configured to deploy to [Vercel Edge Functions](https://vercel.com/docs/concepts/functions/edge-functions), which means it will be rendered at an edge location near to your users.

## Installation

The adaptor will add a new `vite.config.ts` within the `adapters/` directory, and a new entry file will be created, such as:

```
└── adapters/
    └── vercel-edge/
        └── vite.config.ts
└── src/
    └── entry.vercel-edge.tsx
```

Additionally, within the `package.json`, the `build.server` script will be updated with the Vercel Edge build.

## Production build

To build the application for production, use the `build` command, this command will automatically run `bun build.server` and `bun build.client`:

```shell
bun build
```

[Read the full guide here](https://github.com/BuilderIO/qwik/blob/main/starters/adapters/vercel-edge/README.md)

## Dev deploy

To deploy the application for development:

```shell
bun deploy
```

Notice that you might need a [Vercel account](https://docs.Vercel.com/get-started/) in order to complete this step!

## Production deploy

The project is ready to be deployed to Vercel. However, you will need to create a git repository and push the code to it.

You can [deploy your site to Vercel](https://vercel.com/docs/concepts/deployments/overview) either via a Git provider integration or through the Vercel CLI.
