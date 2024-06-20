var Encore = require('@symfony/webpack-encore');

Encore
    // putanja direktorijuma gde će kompajlirani assets biti smešteni
    .setOutputPath('public/build/')
    // javna putanja koju web server koristi za pristup output putanji
    .setPublicPath('/build')
    // samo je potrebno ako koristite CDN ili deploy na pod-direktorijum
    //.setManifestKeyPrefix('build/')

    .addEntry('app', './assets/js/app.js')

    // kada je omogućeno, Webpack "podeli" vaše fajlove na manje delove za bolju optimizaciju
    .splitEntryChunks()

    // zahteva dodatnu script tag za runtime.js kada se aplikacija učita
    // ali verovatno želite ovo, osim ako ne pravite single-page aplikaciju
    .enableSingleRuntimeChunk()

    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    // omogućava hashed imena fajlova (npr. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // omogućava @babel/preset-env polyfills
    .configureBabel((babelConfig) => {
        // podesite babelConfig ovde ako je potrebno
    }, {
        useBuiltIns: 'usage',
        corejs: 3
    })
module.exports = Encore.getWebpackConfig();
