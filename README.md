# Run
Change DATABASE_URL in .env to your likes, then run:

```bash
composer install
symfony console doctrine:database:create
symfony console doctrine:schema:update --force
symfony server:start
```

Now open `.../admin` in your browser.