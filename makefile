ADDR = localhost
PORT = 8080

start:
	@php -S $(ADDR):$(PORT)

stop:
	@pkill php

run:
	@make start &
	@chromium -app=http://localhost:8080/index.php
	@make stop
