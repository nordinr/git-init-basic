# Git Basic

Git is a versioning control tools used to manage project from development to deployment.

## 1. Installing Git
Here's the straight forward guidelines on how to install git on your machine 
> https://git-scm.com/book/en/v2/Getting-Started-Installing-Git

## 2. Register Device using SSH-Key 
To manage shared projects that were set to private, you need an SSH-Key setup.

1. Open `Terminal` for MacOs or `Powershell` on Windows and type

   ```bash
   ssh-keygen -t rsa -C "Your Workstation/PC Name"
   ```
2. Copy and Paste the pubkey to your SSH-Key records in github account.

     _MacOs :_
   ```bash
   cat ~/.ssh/id_rsa.pub
   ```
   _Windows :_
   ```bash
   cat .ssh/id_rsa.pub # - on your User Directory
   ```
4. From this point, you can clone and manage all private repositories assigned to or shared with you without password

_Note: Other method to access or giving access is to set an __access token___



## 3. Clone a repository
