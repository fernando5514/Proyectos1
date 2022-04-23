app.on('ready', () => {
    mainWindow = new BrowserWindow({
        webPreferences: {
            nodeIntegration: true
        }
    });
});

var mysql = require('mysql');
var conexion= mysql.createConnection({
    host : '83.47.104.187',
    database : 'coffee_cars',
    user : 'admin',
    password : 'admin',
});

conexion.connect(function(err) {
    if (err) {
        console.error('Error de conexion: ' + err.stack);
        return;
    }
    console.log('Conectado con el identificador ' + conexion.threadId);
});
