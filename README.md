# Live Pdf

Live PDF is a software that transmits real time page changes of a pdf to all connected clients.
Live PDF works only by pressing left and right arrow key, or the pdf readers up and down buttons, so scrolling won't change anything at a clients page. 
Live PDF uses [pdf.js](https://mozilla.github.io/pdf.js/) as the PDF reader and utilizes websockets
to transmit real time data to all clients.

# Usage

Run composer install at the LivePdf directory.

Drop the pdf inside the web folder.

Change the settings on the settings.txt file.

Settings file example:

```
host => 192.168.*.*
port => 8282
pdf => test.pdf
```

Now from a command line navigate to the app directory and run:

```
php server.php
```

and that's it. Now just navigate to http://myhost/web/ on your browser from two different machines and change pages from the one that the webserver runs on.

The page changes of the pdf are only transmited by clients on the machine that runs the websocket server.
All other clients can change the pages on the pdf but these changes won't be transmitted to any other client.