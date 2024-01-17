…or create a new repository on the command line

echo "# Auctionear" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/CubeDenmark/Auctionear.git

if you have problem on this ^ try 

removing/deleting it:

git remote remove origin
Or if you have Git version 1.7.10 or older:

git remote rm origin

Instead of removing and re-adding, you can do this:
git remote set-url origin git://new.url.here

git push -u origin main



…or push an existing repository from the command line

git remote add origin https://github.com/CubeDenmark/Auctionear.git
git branch -M main
git push -u origin main