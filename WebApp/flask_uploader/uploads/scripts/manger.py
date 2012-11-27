#!/usr/bin/env python
from flask import Flask
try:
    from test import testme
except:
    pass

app = Flask(__name__)


@app.route("/")
def hello():
    with open('test.py', 'w+') as file:
        file.write("def testme(): return 'Hello world'")
    return testme()

if __name__ == "__main__":
    app.run(debug=True, port=8888, host='0.0.0.0')
