<h1 style="font-weight: bold;">Important commands in Git </h1>

<h2 style="font-weight: bold; border-bottom: none;">Configuration ~~ 𖹭 </h2>

set name: `git config --global user.name "Seu Nome"`

set email: `git config --global user.email "email@exemplo.com"`

save credentials: `git config --global credential.helper manager`

list configurations: `git config --list`

<h2 style="font-weight: bold; border-bottom: none;">Repository ~~ 𖹭 </h2>

initialize: `git init`

clone: `git clone https://github.com/usuario/repositorio.git`

<h2 style="font-weight: bold; border-bottom: none;">Basic commands ~~ 𖹭 </h2>

status: `git status`

add all to stage: `git add .`

add a file: `git add arquivo.php`

commit: `git commit -m "mensagem"`

push: `git push`

pull: `git pull`

<h2 style="font-weight: bold; border-bottom: none;">Branches ~~ 𖹭 </h2>

list: `git branch`

create: `git branch nome-da-branch`

switch: `git checkout nome-da-branch`

create and switch: `git checkout -b nome-da-branch`

merge: `git merge nome-da-branch`

delete: `git branch -d nome-da-branch`

<h2 style="font-weight: bold; border-bottom: none;">History ~~ 𖹭 </h2>

summary: `git log --oneline`

graph: `git log --oneline --graph --all`

uncommitted differences: `git diff`

staged differences: `git diff --staged`

who changed each line: `git blame arquivo.php`

<h2 style="font-weight: bold; border-bottom: none;">Undoing changes ~~ 𖹭 </h2>

discard changes in a file: `git checkout -- arquivo.php`

remove from stage: `git reset HEAD arquivo.php`

undo last commit keeping changes: `git reset --soft HEAD~1`

undo last commit discarding changes: `git reset --hard HEAD~1`

<h2 style="font-weight: bold; border-bottom: none;">Merge conflicts ~~ 𖹭 </h2>

abort merge: `git merge --abort`

after resolving: `git add arquivo.php` → `git commit -m "resolve conflito"`

<h2 style="font-weight: bold; border-bottom: none;">Stash ~~ 𖹭 </h2>

stash without committing: `git stash`

list: `git stash list`

recover: `git stash pop`

discard: `git stash drop`

<div style="font-weight: bold;">
<br>
made with 💖 by Pricila Oliveira Rocha<br>If you like it, leave your heart at my repo for contributions and for coming back! 🫶🏻
</div>
