// git init Create an empty repository (i.e., the ~/.git directory)

git clone url [directory] Clone a repository into directory (optional) (. clones into current directory)<br>

> Make Changes # Review edits and prepare a commit
> git status Show list of changed files in the current directory
> git diff [-w] Show changes of unstaged tracked files (-w to ignore whitespace changes)
> git diff --staged Show changes of staged tracked files
> git add file Stage file to be committed
> git add -u Stage all modified tracked files to be committed
> git add . Stage all files and directories to be committed (note trailing dot)
> Undo Changes # Undo uncommitted changes
> git checkout HEAD file Discard local unstaged changes to file
> git checkout HEAD . Discard all local unstaged changes (note trailing dot)
> git clean Remove untracked files from the working directory
> git reset HEAD file Unstage file, but preserve its changes
> git reset --hard HEAD file Unstage file, and discard all local changes not undoable
> git reset Unstage all files, but preserve all local changes
> git reset --hard Unstage all files, and discard all local changes not undoable
> git revert commit Undo a previous commit (by producing a new commit with contrary changes)
> Commit Changes # Record file snapshots permanently in version history
> git commit [-m "message"] Commit previously staged changes (-m to add commit "message")
> git commit -a Commit all changes in tracked files (without needing to stage them first)
> Branch # Name a series of commits
> git checkout -b branch Create new branch (from the current HEAD) and switch to it
> git checkout branch Switch to the existing branch and update the working directory
> git branch [-v] Lists all local branches in the current repository (-v to list verbosely)
> git branch branch Create new local branch (from the current HEAD), but do not switch to it
> git branch show -a
> git branch -d branch Delete the local branch
> git branch -D branch Delete the local branch (even if it hasn't been merged yet)
> git branch -m old new Rename local branch old to new
> Tag # Tag a commit <a name="tag"
> git tag -a tag [-m "msg"] Create annotated tag locally (-m to add "msg" to the tag)
> git push origin --tags Push local tags to the remote repository origin
> Merge # Merge changes in one branch into another
> git merge branch Merge changes in branch into your current branch
> git merge --no-commit branch Merge changes in branch into your current branch, but leave changes uncommitted
> git rebase branch Merge changes in your current branch into branch
> git rebase --abort Abort a rebase
> git add file Mark file as resolved (after manually editing the file to resolve conflicts)
> git rm file Mark file as resolved (by deleting it)
> git rebase --continue Continue a rebase after manually resolving conflicts
> Refactor Files and Directories # Relocate and remove tracked files and directories
> git mv old new Move (rename) old to new, and stage the move
> git rm file Delete file from the working directory, and stage the deletion
> git rm --cached file Stage the deletion of file, but preserve the file locally
> Review History Browse and inspect the evolution of project files
> git log [-p] Show all commits, newest first (-p to show content changes)
> git log --follow file Show all commits for file, including renames
> git blame file Show who changed what and when in file
> git show commit Show content changes and metadata of commit
> git diff branch1...branch2 Show content changes between branches branch1 and branch2
> Redo Commits # Erase mistakes and craft replacement history
> git commit --amend Amend (redo) the last commit Don't amend published commits!
> git reset --soft HEAD^ Uncommit the last commit, and preserve local changes
> git reset --soft HEAD~2 Uncommit the last 2 commits, and preserve local changes
> git reset commit Undo all commits after commit, and preserve local changes
> git reset --hard commit Undo all commits after commit and discard local changes not undoable
> Stash Changes # Stash away and restore uncommitted changesets
> git stash Temporarily stash away all modified tracked files, and revert local changes to those files
> git stash save "message" Same as above, but add "message" to stashed files
> git stash -a Same as git stash, but stash away all untracked files as well, and remove them locally
> git stash list List all stashed changesets
> git stash pop Restore the most recently stashed files
> git stash drop Discard the most recently stashed changeset not undoable
> git stash clear Discard all stashed changesets not undoable
> Remotes # Work with remote repositories
> git remote -v List all currently configured remotes
> git remote show origin Show remote branches on origin
> git remote add origin url Add new remote repository url and give it the alias of origin
> git remote rename old new Rename remote alias old to new
> git remote prune origin Prune dead (merged) branches on origin
> git push origin :refs/tags/tag Delete remote tag
> git branch -r List remote branches for default remote repository (typically origin)
> git push origin --delete branch Delete remote branch on remote repository origin
> Download # Download commits from remote repositories
> git fetch Download commits from default remote repository (typically origin), but do not apply changes
> git pull Download commits from default remote repository (typically origin), and apply changes to current local branch
> git fetch origin Download commits from remote repository origin, but do not apply changes
> git pull origin Download commits from remote repository origin, and apply changes to current local branch
> git merge origin/branch Merge origin’s branch's changes into current local branch
> Upload # Upload commits to remote repositories
> git push Upload all local commits to default remote repository / branch (typically origin master)
> git push origin branch Upload all local commits to branch on remote repository origin
> Resolve # Resolve conflicts from a failed merge
> git diff View all merge conflicts
> git diff --base file View merge conflicts against base file
> git diff --ours file View merge conflicts against our changes
> git diff --theirs file View merge conflicts against other changes
> Bisect # Find regressions
> git bisect start Start
> git bisect good commit Mark commit as the last good working version
> git bisect bad commit Mark commit as a broken version
> git bisect reset Once you're done
> Submodule # Use submodules
> git submodule add url dir Set up remote repository url in directory dir
> Configure # Configure your user information for all local repositories
> git config --global user.name "My Name" Set the name you want atached to your commits
> git config --global user.email "my@email" Set the email you want atached to your commits
> git config --global color.ui auto Enable helpful colorization of command line output
