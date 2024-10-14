// git init Create an empty repository (i.e., the ~/.git directory)

> git clone url [directory] Clone a repository into directory (optional) (. clones into current directory)<br>
> Make Changes # Review edits and prepare a commit<br>
> git status Show list of changed files in the current directory<br>
> git diff [-w] Show changes of unstaged tracked files (-w to ignore whitespace changes)<br>
> git diff --staged Show changes of staged tracked files<br>
> git add file Stage file to be committed<br>
> git add -u Stage all modified tracked files to be committed<br>
> git add . Stage all files and directories to be committed (note trailing dot)<br>
> Undo Changes # Undo uncommitted changes<br>
> git checkout HEAD file Discard local unstaged changes to file<br>
> git checkout HEAD . Discard all local unstaged changes (note trailing dot)<br>
> git clean Remove untracked files from the working directory<br>
> git reset HEAD file Unstage file, but preserve its changes<br>
> git reset --hard HEAD file Unstage file, and discard all local changes not undoable<br>
> git reset Unstage all files, but preserve all local changes<br>
> git reset --hard Unstage all files, and discard all local changes not undoable<br>
> git revert commit Undo a previous commit (by producing a new commit with contrary changes)<br>
> Commit Changes # Record file snapshots permanently in version history<br>
> git commit [-m "message"] Commit previously staged changes (-m to add commit "message")<br>
> git commit -a Commit all changes in tracked files (without needing to stage them first)<br>
> Branch # Name a series of commits<br>
> git checkout -b branch Create new branch (from the current HEAD) and switch to it<br>
> git checkout branch Switch to the existing branch and update the working directory<br>
> git branch [-v] Lists all local branches in the current repository (-v to list verbosely)<br>
> git branch branch Create new local branch (from the current HEAD), but do not switch to it<br>
> git branch show -a<br>
> git branch -d branch Delete the local branch<br>
> git branch -D branch Delete the local branch (even if it hasn't been merged yet)<br>
> git branch -m old new Rename local branch old to new<br>
> Tag # Tag a commit <a name="tag"<br>
> git tag -a tag [-m "msg"] Create annotated tag locally (-m to add "msg" to the tag)<br>
> git push origin --tags Push local tags to the remote repository origin<br>
> Merge # Merge changes in one branch into another<br>
> git merge branch Merge changes in branch into your current branch<br>
> git merge --no-commit branch Merge changes in branch into your current branch, but leave changes uncommitted<br>
> git rebase branch Merge changes in your current branch into branch<br>
> git rebase --abort Abort a rebase<br>
> git add file Mark file as resolved (after manually editing the file to resolve conflicts)<br>
> git rm file Mark file as resolved (by deleting it)<br>
> git rebase --continue Continue a rebase after manually resolving conflicts<br>
> Refactor Files and Directories # Relocate and remove tracked files and directories<br>
> git mv old new Move (rename) old to new, and stage the move<br>
> git rm file Delete file from the working directory, and stage the deletion<br>
> git rm --cached file Stage the deletion of file, but preserve the file locally<br>
> Review History Browse and inspect the evolution of project files<br>
> git log [-p] Show all commits, newest first (-p to show content changes)<br>
> git log --follow file Show all commits for file, including renames<br>
> git blame file Show who changed what and when in file<br>
> git show commit Show content changes and metadata of commit<br>
> git diff branch1...branch2 Show content changes between branches branch1 and branch2<br>
> Redo Commits # Erase mistakes and craft replacement history<br>
> git commit --amend Amend (redo) the last commit Don't amend published commits!<br>
> git reset --soft HEAD^ Uncommit the last commit, and preserve local changes<br>
> git reset --soft HEAD~2 Uncommit the last 2 commits, and preserve local changes<br>
> git reset commit Undo all commits after commit, and preserve local changes<br>
> git reset --hard commit Undo all commits after commit and discard local changes not undoable<br>
> Stash Changes # Stash away and restore uncommitted changesets<br>
> git stash Temporarily stash away all modified tracked files, and revert local changes to those files<br>
> git stash save "message" Same as above, but add "message" to stashed files<br>
> git stash -a Same as git stash, but stash away all untracked files as well, and remove them locally<br>
> git stash list List all stashed changesets<br>
> git stash pop Restore the most recently stashed files<br>
> git stash drop Discard the most recently stashed changeset not undoable<br>
> git stash clear Discard all stashed changesets not undoable<br>
> Remotes # Work with remote repositories<br>
> git remote -v List all currently configured remotes<br>
> git remote show origin Show remote branches on origin<br>
> git remote add origin url Add new remote repository url and give it the alias of origin<br>
> git remote rename old new Rename remote alias old to new<br>
> git remote prune origin Prune dead (merged) branches on origin<br>
> git push origin :refs/tags/tag Delete remote tag<br>
> git branch -r List remote branches for default remote repository (typically origin)<br>
> git push origin --delete branch Delete remote branch on remote repository origin<br>
> Download # Download commits from remote repositories<br>
> git fetch Download commits from default remote repository (typically origin), but do not apply changes<br>
> git pull Download commits from default remote repository (typically origin), and apply changes to current local branch<br>
> git fetch origin Download commits from remote repository origin, but do not apply changes<br>
> git pull origin Download commits from remote repository origin, and apply changes to current local branch<br>
> git merge origin/branch Merge origin’s branch's changes into current local branch<br>
> Upload # Upload commits to remote repositories<br>
> git push Upload all local commits to default remote repository / branch (typically origin master)<br>
> git push origin branch Upload all local commits to branch on remote repository origin<br>
> Resolve # Resolve conflicts from a failed merge<br>
> git diff View all merge conflicts<br>
> git diff --base file View merge conflicts against base file<br>
> git diff --ours file View merge conflicts against our changes<br>
> git diff --theirs file View merge conflicts against other changes<br>
> Bisect # Find regressions<br>
> git bisect start Start<br>
> git bisect good commit Mark commit as the last good working version<br>
> git bisect bad commit Mark commit as a broken version<br>
> git bisect reset Once you're done<br>
> Submodule # Use submodules<br>
> git submodule add url dir Set up remote repository url in directory dir<br>
> Configure # Configure your user information for all local repositories<br>
> git config --global user.name "My Name" Set the name you want atached to your commits<br>
> git config --global user.email "my@email" Set the email you want atached to your commits<br>
> git config --global color.ui auto Enable helpful colorization of command line output<br>
