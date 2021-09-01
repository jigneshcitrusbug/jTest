# npm run prod
git checkout staging
git pull
git merge master
git status
git add .
git commit -m "seo update"
git push
git checkout master
git pull
git merge staging
git push
git checkout staging