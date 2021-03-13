from flask import Flask,url_for,render_template
app = Flask(__name__)
@app.route('/')
def index():
    return render_template("index.html")
@app.route('/aboutus')
def aboutus():
    return render_template("aboutus.html")
@app.route('/servicespage')
def servicespage():
    return render_template("services-page.html")
@app.route('/ourservices')
def ourservices():
    return render_template("our-services.html")
@app.route('/contactus')
def contactus():
    return render_template("contact-us.html")
@app.route('/blog')
def blog():
    return render_template("blog.html")
@app.route('/blogpage')
def blogpage():
    return render_template("blog-page.html")
@app.route('/vehiclespage')
def vehiclespage():
    return render_template("vehicles-page.html")
@app.route('/allvehicles')
def allvehicles():
    return render_template("all-vehicles.html")
@app.route('/comingsoon')
def comingsoon():
    return render_template("coming-soon.html")
@app.route('/error')
def error():
    return render_template("404.html")
if __name__ == '__main__':
    app.run(debug=True)