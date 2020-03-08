const express = require('express')
const app = express()
const port = 3000

app.use(express.static('myapp'))
app.use(express.static('public'))
app.use('/static', express.static(path.join(__dirname, 'myapp')))


app.listen(port, () => console.log(`Example app listening on port ${port}!`))