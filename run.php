<?php

$project = basename(dirname(__FILE__));

shell_exec("docker stop $project && docker rm $project");
shell_exec('docker system prune --force --volumes');
shell_exec('docker compose --file docker-compose.dev.yml up --detach');
shell_exec("cd wp-content/themes/$project && npx tailwindcss -i ./assets/css/style.css -o ./assets/css/tailwind.css --watch");

die();