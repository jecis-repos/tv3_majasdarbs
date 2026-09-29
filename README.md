# WordPress exercise

Run the WordPress database fixture locally with Docker Compose:

```sh
cp .env.example .env
docker compose up -d --wait
docker compose exec wordpress php /opt/exercise/bootstrap.php
```

Open http://localhost:8081. The fixture is imported on the first start of a new database volume. The bootstrap command upgrades its schema and activates the bundled default theme if the historical theme is unavailable.

This repository contains a database dump, not a backup of the original WordPress plugins, themes or uploads. The local page may therefore differ from the historical site.

Use `HTTP_PORT` in `.env` to choose another local port. `docker compose down` stops the containers and retains data. No manual database import or container-name lookup is required.
