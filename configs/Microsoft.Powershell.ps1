[Console]::InputEncoding = [System.Text.UTF8Encoding]::new()
[Console]::OutputEncoding = [System.Text.UTF8Encoding]::new()
$OutputEncoding = [System.Text.UTF8Encoding]::new()

Clear-Host

# =================== Terminal Icons ===================
if (Get-Module -ListAvailable -Name Terminal-Icons) {
    Import-Module Terminal-Icons
}

# =================== PSReadLine Colors ===================
if (Get-Module -ListAvailable -Name PSReadLine) {
    Set-PSReadLineOption -Colors @{
        Command   = "#FFD866"
        Parameter = "#A9DC76"
        Operator  = "#FF6188"
        Variable  = "#AB9DF2"
        String    = "#FFAF61"
        Number    = "#78DCE8"
        Type      = "#78DCE8"
        Comment   = "#6E6E6E"
        Default   = "White"
    }
}

# =================== Box Output ===================
function Write-Box {
    param(
        [string[]]$Lines,
        [string]$Title = "Output",
        [int]$MaxWidth = 100
    )

    if (-not $Lines -or $Lines.Count -eq 0) {
        $Lines = @("(no output)")
    }

    $maxLineLength = 0

    foreach ($line in $Lines) {
        if ($line.Length -gt $maxLineLength) {
            $maxLineLength = $line.Length
        }
    }

    $contentWidth = [Math]::Min(
        [Math]::Max($maxLineLength, $Title.Length),
        $MaxWidth
    )

    $topLabel = " $Title "
    $topFill = "─" * ([Math]::Max(($contentWidth + 2) - $topLabel.Length, 0))

    Write-Host ""
    Write-Host (" ╭" + $topLabel + $topFill + "╮") -ForegroundColor DarkMagenta

    foreach ($line in $Lines) {
        if ($line.Length -gt $contentWidth) {
            $line = $line.Substring(0, $contentWidth - 3) + "..."
        }

        Write-Host (" │ " + $line.PadRight($contentWidth) + " │") -ForegroundColor Magenta
    }

    Write-Host (" ╰" + ("─" * ($contentWidth + 2)) + "╯") -ForegroundColor DarkMagenta
}

# box { qualquer-comando } -Title "Meu Título"
function box {
    param(
        [Parameter(Mandatory = $true, Position = 0)]
        [scriptblock]$Command,

        [string]$Title = "Output"
    )

    $output = & $Command 2>&1 | Out-String -Width 200

    $lines = $output -split "`r?`n" | Where-Object {
        $_ -ne ""
    }

    Write-Box -Lines $lines -Title $Title
}

# =================== Beautiful Commands ===================
function lsb {
    box { Get-ChildItem } -Title "Directory"
}

function phpb {
    box { php -v } -Title "PHP"
}

function composerb {
    box { composer --version } -Title "Composer"
}

function gitb {
    box { git status --short } -Title "Git Status"
}

# =================== Welcome Message ===================
$day = (Get-Date).DayOfWeek
$time = Get-Date -Format "HH:mm:ss"

$phrases = @(
    "🌸 Keep going. Every line of code makes you better.",
    "✨ Small progress is still progress.",
    "☁️ Code with patience, debug with logic.",
    "🐛 Great developers are built one bug at a time.",
    "🌷 Focus on progress, not perfection.",
    "🪄 Every error is a step toward mastery.",
    "🧁 Build it. Break it. Fix it. Learn from it.",
    "🌙 Consistency beats motivation.",
    "🧠 Think clearly. Code simply.",
    "🤍 Your future self will thank you for clean code."
)

$randomPhrase = Get-Random -InputObject $phrases

Write-Host ""
Write-Host " ✨ Hello Pri, today is $day at $time" -ForegroundColor DarkGray
Write-Host " Happy coding! 🌸🌙" -ForegroundColor DarkGray
Write-Host ""
Write-Host " ╭────────────────────────────────────────────╮" -ForegroundColor DarkMagenta
Write-Host " │  $randomPhrase" -ForegroundColor Magenta
Write-Host " ╰────────────────────────────────────────────╯" -ForegroundColor DarkMagenta

# =================== Prompt ===================
function prompt {
    $pastaAtual = Split-Path -Leaf -Path (Get-Location)
    $horaAtual = Get-Date -Format "HH:mm:ss"

    if ((Get-Location).Path -eq $HOME) {
        $pastaAtual = "~"
    }

    Write-Host "`n $horaAtual " -NoNewline -ForegroundColor DarkGray
    Write-Host "$pastaAtual " -NoNewline -ForegroundColor Magenta
    Write-Host "♡ " -NoNewline -ForegroundColor White

    return " "
}