# Git Basic Guide (Step-by-Step)

Git is a versioning control tools used to manage project and track changes.
# PART 01
## 1. Installing Git
Here's the straight forward guidelines on how to install git on your machine 
> https://git-scm.com/book/en/v2/Getting-Started-Installing-Git

Run `git -v`command on Terminal/Poweshell to check Git was properly installed :

      git -v
      git version 2.46.0
      
## 2. Register Device using SSH-Key 
To manage shared projects that were set to private, you need an SSH-Key setup.

Open `Terminal` for MacOs or `Powershell` on Windows and type

   ```bash
   ssh-keygen -t rsa -C "<whatever-remark>"
   ```
Copy and Paste the pubkey to your SSH-Key records in github account [here](https://github.com/settings/keys)

   _MacOs :_
   ```bash
   cat ~/.ssh/id_rsa.pub
   ```
   _Windows :_
   ```bash
   cat .ssh/id_rsa.pub # - on your User Directory
   ```

> <b>make sure to run below commands to set user on your workstation : </b><br>
> git config --global user.name "Your Github User" <br>
> git config --global user.email email@ofyourgitlab 

From this point, you can clone and manage all private repositories assigned to or shared with you without password

_Note: Other method to access or giving access is to set an __access token___


## 3. Clone a repository
Go to 
> https://github.com/nordinr/git-init-basic/

Hit the code button (blue-colored) and copy the clone url (SSH)

![clone a project using ssh](./assets/clone.png)


Git clone command

   ```bash
   git clone git@github.com:nordinr/git-init-basic.git
   ```


## 4. Branch
Branch is a feature that separate repo to a different copies. Some repo owner use branch to separate versions instead. That's depends on your branch strategy. In general, branch were used to make copies of your project and modify them for the next versions. 

> master or main branch also called a **stable** branch that contains most stable code of the project. 

## 5. Merge and Pull Request
After making a changes on a branch, feature or dev, normal practice is to merge them into main before release. This also called Pull Request.

## 6. Tag and Release
When a project reach some progress point, a good practice is to introduce a tag and release point. Also called version.

Semantic versioning follows the format:<br>
```
<MAJOR.MINOR.PATCH>

MAJOR: Incremented for breaking changes.
MINOR: Incremented for new features that are backward-compatible.
PATCH: Incremented for backward-compatible bug fixes.

eg: v1.0.1, v1.1.2, v1.2.0-feature-name, v1-stable etc...
```
This basic introduction was made for PITA Projects' Students, UMT

