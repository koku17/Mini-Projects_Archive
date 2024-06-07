ADDR = localhost
PORT = 8080

start:
	@php -S $(ADDR):$(PORT) &

run: start
	@chromium -app=http://localhost:8080/index.php

stop:
	@pkill php
doc:
	@latexmk -auxdir=tmp -cd -pdfxe -shell-escape doc/doc.tex 1> /dev/null

clean:
	@rm -rf doc/tmp

.PHONY: doc
