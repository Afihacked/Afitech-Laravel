param(
    [string]$message
)

if (-not $message) {
    Write-Host "Usage: git save \"commit message\""
    exit 1
}

Write-Host "Staging all changes..."
git add .

Write-Host "Committing with message: $message"
git commit -m "$message"

Write-Host "Pushing to origin..."
git push
