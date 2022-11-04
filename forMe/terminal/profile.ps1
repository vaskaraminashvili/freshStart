Invoke-Expression (&starship init powershell)
function Get-GitStatus { & git status -sb $args }
New-Alias -Name s -Value Get-GitStatus -Force -Option AllScope
function Get-GitCommit { & git commit -ev $args }
New-Alias -Name c -Value Get-GitCommit -Force -Option AllScope
function Get-GitAdd { & git add --all $args }
New-Alias -Name ga -Value Get-GitAdd -Force -Option AllScope
function Get-GitTree { & git log --graph --oneline --decorate $args }
New-Alias -Name t -Value Get-GitTree -Force -Option AllScope
function Get-GitPush { & git push $args }
New-Alias -Name gps -Value Get-GitPush -Force -Option AllScope
function Get-GitPull { & git pull $args }
New-Alias -Name gpl -Value Get-GitPull -Force -Option AllScope
function Get-GitFetch { & git fetch $args }
New-Alias -Name f -Value Get-GitFetch -Force -Option AllScope
function Get-GitCheckout { & git checkout $args }
New-Alias -Name co -Value Get-GitCheckout -Force -Option AllScope
function Get-GitBranch { & git branch $args }
New-Alias -Name b -Value Get-GitBranch -Force -Option AllScope
function Get-GitRemote { & git remote -v $args }
New-Alias -Name r -Value Get-GitRemote -Force -Option AllScope

function Cd-Up{ cd ../}
New-Alias -Name .. -Value Cd-Up -Force -Option AllScope

function gs{git status}
function ga{git add .}
Function gcm([string]$arg1)
{
    git commit -m "$arg1"
}
Function gpo([string]$arg1)
{
    git push origin "$arg1"
}

function ..{cd ../}