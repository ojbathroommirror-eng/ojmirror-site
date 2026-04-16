# MirrorCraft WordPress Local Setup

This project contains a local Docker-based WordPress environment and a rebuilt custom theme at `wp-content/themes/mirrorcraft`.

## Quick start

1. Copy the environment template:

```bash
cp .env.example .env
```

2. Start WordPress and MariaDB:

```bash
docker compose up -d
```

3. Open the site:

`http://localhost:8080`

4. Complete the WordPress installer in the browser.

5. In the WordPress admin:

- Activate the `MirrorCraft` theme
- Create pages such as `Home`, `About`, `Products`, `Applications`, `Projects`, `FAQs`, and `Contact`
- Set `Home` as the static front page
- Assign the included page templates where needed

## Included theme templates

- Front page: rebuilt homepage focused on products, applications, and quote flow
- About Page template
- Products Page template
- Applications Page template
- Projects Page template
- FAQs Page template
- Contact Page template
- Download Catalogue Page template
- Product Category Page template

## Recommended page setup

- `Home` using the default front page
- `About` using `About Page`
- `Products` using `Products Page`
- `Applications` using `Applications Page`
- `Projects` using `Projects Page`
- `FAQs` using `FAQs Page`
- `Contact` using `Contact Page`
- Product category pages using `Product Category Page`
- Optional download page using `Download Catalogue Page`

## Editing model

The current rebuilt theme does not require Advanced Custom Fields.

Custom template pages render the native WordPress page editor content. This means you can use Gutenberg blocks in the page body for visual editing, including images, galleries, columns, buttons, and rich text sections, while keeping the rebuilt theme structure and conversion-focused sections.

## Useful commands

Start services:

```bash
docker compose up -d
```

Stop services:

```bash
docker compose down
```

View logs:

```bash
docker compose logs -f
```

## Production deployment for `www.ojmirror.com`

This repo now also includes a production-oriented setup using Docker + Caddy:

- Production compose file: `docker-compose.production.yml`
- Caddy HTTPS config: `infra/Caddyfile`
- Production env template: `.env.production.example`

### 1. Prepare DNS

At your domain provider, point the domain to your server:

- `A` record for `@` -> your server public IP
- `CNAME` record for `www` -> `ojmirror.com`

The production config treats `https://www.ojmirror.com` as the primary site and redirects `ojmirror.com` to `www.ojmirror.com`.

### 2. Prepare the server

On your Linux server:

```bash
git clone <your-repo-url>
cd "New project 4"
cp .env.production.example .env
```

Edit `.env` and set:

- `LETSENCRYPT_EMAIL`
- `WORDPRESS_DB_PASSWORD`
- `MARIADB_ROOT_PASSWORD`

### 3. Start the production stack

```bash
docker compose -f docker-compose.production.yml --env-file .env up -d
```

This stack will:

- run MariaDB
- run WordPress
- expose ports `80` and `443`
- automatically issue HTTPS certificates through Caddy
- force WordPress to use `https://www.ojmirror.com`

### 4. Open the site

After DNS finishes propagating, open:

`https://www.ojmirror.com`

### 5. Notes

- Make sure ports `80` and `443` are open in your server firewall and cloud security group.
- If this is the first deployment, complete the WordPress installer in the browser after the containers start.
- If you previously installed WordPress on another URL, update `home` and `siteurl` to `https://www.ojmirror.com` before going live.

## Automatic deployment with GitHub Actions

This repo now includes a production deploy workflow at `.github/workflows/deploy-production.yml`.

It will:

- deploy automatically when you push to `main` or `master`
- also support manual deployment from the GitHub Actions page
- SSH into your Linux server
- run `git pull`
- run `docker compose -f docker-compose.production.yml --env-file .env pull`
- run `docker compose -f docker-compose.production.yml --env-file .env up -d --remove-orphans`
- optionally verify the site with a healthcheck URL after deployment

### 1. Prepare the server once

On the server, make sure all of the following are already working:

- the repo is cloned to a fixed path such as `/www/ojmirror`
- `.env` already exists in that project directory
- `docker compose -f docker-compose.production.yml --env-file .env up -d` has been run successfully at least once
- the server can run `git pull origin main` or `git pull origin master` without asking for a password

If your repo is private, the server itself also needs Git access to the repo, usually through a deploy key or a personal access token.

### 2. Add GitHub Secrets

In GitHub, open:

`Settings -> Secrets and variables -> Actions`

Add these repository secrets:

- `DEPLOY_HOST`: your server IP or domain
- `DEPLOY_PORT`: optional SSH port, usually `22`
- `DEPLOY_USER`: the Linux user used for deployment
- `DEPLOY_PATH`: absolute project path on the server, for example `/www/ojmirror`
- `DEPLOY_SSH_KEY`: the private SSH key that GitHub Actions will use to connect to the server
- `DEPLOY_HEALTHCHECK_URL`: optional, for example `https://www.ojmirror.com/`

### 3. Add the GitHub Actions public key to the server

The public key matching `DEPLOY_SSH_KEY` must be added to:

`~/.ssh/authorized_keys`

for your deployment user on the server.

### 4. Trigger deployment

After that:

- pushing to `main` or `master` will deploy automatically
- or you can open `Actions -> Deploy Production -> Run workflow`
- when running manually, leave `branch` empty to deploy the branch selected in the GitHub Actions UI
- if `DEPLOY_HEALTHCHECK_URL` is set, the workflow will poll that URL after deployment and fail the run if the site does not come back healthy

### 5. What "automatic update" means here

- local file changes do not go live by themselves
- the automatic update happens after you commit and push to GitHub
- GitHub Actions then connects to the production server and updates the live stack
- because the workflow also runs `docker compose pull`, WordPress, MariaDB, and Caddy image updates are pulled during deployment when newer tags are available

### 6. Branch notes

The included workflow listens to `main` and `master`.

If your production branch uses another name, update `.github/workflows/deploy-production.yml`.
