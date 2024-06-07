ADDR = localhost
PORT = 8080

start:
	@php -S $(ADDR):$(PORT) &

run: start
	@chromium -app=http://localhost:8080/index.php
