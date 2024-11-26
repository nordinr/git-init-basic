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
   ssh-keygen -t rsa -C "Your Workstation/PC Name"
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

 [End of Part 01]

# PART 02

## 1. Branch
This repo has 2 basic branches. `master and development`.

Place this repo on a directory and open file `example01/index.html` in any browser.