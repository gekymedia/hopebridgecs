# SchoolsGH Production Deployment Script (PowerShell)
# Live site: https://hopebridgecs.com
# Server: gekymedia.com
# Path: /home/gekymedia/web/hopebridgecs.com/public_html (Hestia)
# (Adapted from CUG deploy.ps1)

Write-Host "Committing and pushing local changes..." -ForegroundColor Cyan
git add .
git commit -m "Deploy: $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')"
if ($LASTEXITCODE -ne 0) { Write-Host "No changes to commit" -ForegroundColor Yellow }
git push origin main

Write-Host "Deploying to production..." -ForegroundColor Cyan
$remoteCmd = 'cd /home/gekymedia/web/hopebridgecs.com/public_html && git pull origin main && composer install --no-dev --optimize-autoloader && (test -f scripts/ensure-hestia-env.sh && sudo -u gekymedia bash scripts/ensure-hestia-env.sh || true) && chown -R gekymedia:www-data /home/gekymedia/web/hopebridgecs.com/public_html && php artisan migrate --force && php artisan optimize:clear && php artisan config:cache && php artisan route:cache && php artisan view:cache && php artisan optimize && php artisan queue:restart'
ssh root@gekymedia.com $remoteCmd
