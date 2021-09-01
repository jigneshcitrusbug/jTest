const express = require('express');
const app = express();
const expressStaticGzip = require('express-static-gzip');
const path = require('path');
const port = process.env.PORT || 3000;

app.use('/', expressStaticGzip(path.join(__dirname), {
    enableBrotli: true,
    customCompressions: [{
        encodingName: 'deflate',
        fileExtension: 'zz'
    }],
    orderPreference: ['br'],
    setHeaders: function (res /*, path */) {
        res.setHeader('Cache-Control', 'public, max-age=31536000');
    },
}));

app.get('*', (req, res) => {
    res.sendFile(__dirname + '/index.html');
});

app.listen(port, () => console.log(`Listening on port ${port}`));
