var mysql = require('mysql');
var conn = mysql.createConnection({
	host : 'localhost',
	user : 'root',
	password : 'smartport4int',
	database : 'test'
});
conn.connect();

var sql = 'SELECT * FROM test ORDER BY time DESC';
conn.query(sql, (err, rows, fields) => {
	if(err){
		console.log(err);
	} else {
		console.log('rows', rows[0]);
	}
});
conn.end();
