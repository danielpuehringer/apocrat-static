## Before you add anything to this project, please talk to dani first!

# apocrat-static
Static Website, designed by Laura in Nov 2020
Developed by Dani Pühringer in Nov 2020 - Jan 2021

# How to change Markup (=.html/.php or .js files)
- Simply upload them to the server and push changes into git

# How to change CSS Files
- Run build pipeline --> ```npm run build```

#Setup for frontend build pipeline
1. Check if you have node & npm installed (run 'node -v' or sth similar)
2. Run ```npm install```, never add package-lock.json into git.
3. Develop in the /src folder, except js files(change them in /dist/js ) --> this is because of performance!
4. For building files run ```npm run build```
5. Upload files from /dist folder to server

# If you have never worked with a utility first CSS library, read this:
1. TailwindCSS is used as the CSS Library, watch those videos: https://www.youtube.com/tailwindlabs
2. Also check out: https://tailwindcss.com/docs/utility-first
3. Example instructions for margin-classes: https://tailwindcss.com/docs/margin

#FTP-Info:
1. root-folder auf server: "/relaunch-static"

