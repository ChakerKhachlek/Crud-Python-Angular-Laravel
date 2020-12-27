from flask import Flask
from flask_pymongo import PyMongo
from flask_cors import CORS


app = Flask(__name__)

app.secret_key = "Solari"
app.config["MONGO_URI"] = "mongodb://localhost:27017/crud"
app.config['CORS_HEADERS'] = 'Content-Type'
cors = CORS(app, resources={r"/": {"origins": "http://localhost:4200"}})
mongo = PyMongo(app)

