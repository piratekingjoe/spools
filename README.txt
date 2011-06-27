Spools
Test site:
http://www.gimbalrock.com/spools/v03/spools.html
Doc site:
https://sites.google.com/site/gimbalrockcat/projects/com-spoolsthegame
spools git doc site:
https://sites.google.com/site/gimbalrockcat/projects/com-spoolsthegame/1_spools_github

GIT help:
    GIT cheat sheet - http://ktown.kde.org/~zrusin/git/git-cheat-sheet-medium.png
    GIT 4 Windows - http://nathanj.github.com/gitguide/tour.html
    GIT workflow - http://wwwhome.ewi.utwente.nl/~michaelw/projects/git-setup.html
    GIT ignore - http://help.github.com/ignore-files/  http://gitready.com/beginner/2009/01/19/ignoring-files.html
    GIT stash - http://ariejan.net/2008/04/23/git-using-the-stash/

GIT basics:
    git status
    git add *
    git commit -m "some message here"
    git push

GIT if Joe makes a commit on stuff and I've got other stuff
    git stash save I was moding some.js but joe just did a commit I need
    <note: after "git stash save" the text displays as info>
    git stash list
    git pull
    git stash pop
    git status
    <deal with conflicts>
    git stash list
    git stash clear
    git stash list

Joe... so all I had to do to deploy on website was:
1) ssh into my account.
2) go to where I wanted the site
3) git clone git@github.com:piratekingjoe/spools.git

THATS IT!

I'm here.

Y U no work?!

doo doo dee doo

I'm merging the 