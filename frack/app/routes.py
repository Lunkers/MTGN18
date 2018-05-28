#Importera moduler
from app.webapp import app as webapp
from flask import jsonify, request, send_from_directory
import json
from app import news
import os


#definiera filsökväg till content
static_dir = os.path.join(os.getcwd(), "static", "Schmeck")


#Definiera olika URL-er och vad de leder till
@webapp.route("/")
def index():
    return send_from_directory(static_dir, "index.html")

@webapp.route("/css/<filename>")
def get_css(filename):
    return send_from_directory(os.path.join(static_dir, "css"), filename)

@webapp.route("/js/<filename>")
def get_js(filename):
    return send_from_directory(os.path.join(static_dir, "js"), filename)

@webapp.route("/news/all")
def get_news():
    return jsonify(news.get_news(None))

@webapp.route("/news/<id>")
def get_news_by_id(id):
    return jsonify(news.get_news(id))

@webapp.route("/news", methods = ["POST", "PUT"])
def add_news():
    
    resp = news.save_to_db(request.json)
    return "WOO DET FUNKADE"