ADDR = localhost
PORT = 8080

run:
	@php -S $ADDR:$PORT 1> /dev/null &
	@chromium -app=http://$(ADDR):$(PORT)/index.php

doc:
	@latexmk -auxdir=tmp -cd -pdfxe -shell-escape doc/doc.tex 1> /dev/null

clean:
	@rm -rf doc/tmp

.PHONY: doc
