<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vanessa's Profile</title>
  <link rel="shortcut icon" href="Assets/Logo.png" type="image/x-icon">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="style.css">

  <link href="https://fonts.googleapis.com/css2?family=Fasthand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fasthand&display=swap" rel="stylesheet">

</head>
<body>
  <div class="flex flex-col bg-zinc-100">
    <div id="navbar" class="dark:bg-lime-950 flex flex-row items-center fixed w-full mb-[10.75vw] z-50">
      <a href="#landingPage"><img class="mx-[0.5vw] h-[6.5vw] w-[6.5vw]"src="Assets/Logo.png" alt=""></a>
      <p class="text-white font-fasthand text-[2.1vw]">Vanessa's Profile</p>
      <div class="text-white flex flex-row text-[1.7vw] justify-items-end">
        <a href="#aboutMe" class="cursor-pointer ml-[43vw] hover:underline underline-offset-4">About Me</a>
        <a href="#skills" class="cursor-pointer ml-[7vw] hover:underline underline-offset-4">Skills</a>
        <a href="#reachMe" class="cursor-pointer ml-[7vw] hover:underline underline-offset-4">Reach Me</a>
      </div>
    </div>

    <div class="w-full h-[39vw]">
      <section id="landingPage" class="pt-[6.5vw] relative">
        <div class="h-[38.5vw] w-[68vw] z-10" id="bgImg">
          <div class="h-[29vw] w-[38vw] bg-white absolute place-items-end ml-[59.7vw] mt-[10vw] z-20">
            <p class="font-roboto text-[3.2vw] ml-[1.2vw] mt-[1.5vw]">Hi!<br>I'm Vanessa Kwandinata</p>
            <!-- <p class="text-[1.2vw] ml-[2.8vw] mt-[4.5vw] w-[33vw]">I'm a 5th semester student at BINUS University x BCA majoring in Computer Science.
              <br> I love to explore and learn new things, i have a lot of hobbies.
              Besides studying, I'm /also/ active in running extra and other organizations.
            </p> -->

            <p class="text-[1.2vw] ml-[2.5vw] mt-[5.5vw] w-[33vw] text-justify">
              I'm a 5th semester student at BINUS University x PPTI BCA majoring in Computer Science.
              I love to explore and learn new things, i have a lot of hobbies.
              Besides studying, I'm /also/ active in running extra and other organizations.
            </p>
          </div>
        </div>
      </section>
    </div>
    
    <div id="aboutMe" class="z-0">
      <section class="pt-[6.5vw] w-full h-[50vw]">
        <p class="ml-[3vw] mt-[2vw] text-[3.3vw] z-0">About Me</p>

        <div class="flex flex-row">
          <div class="w-[30vw] h-[50vw] flex flex-col mt-[1vw] ml-[1vw]">
            <h1 class="text-[1.8vw] pt-[2.8vw] ml-[3vw]">Education</h1>
            <div class="flex flex-row">
              <img class="w-[1.8vw] h-[22.5vw] mt-[2.8vw] ml-[4vw]" src="Assets/Timeline2.png" alt="">
              <div>
                <p class="text-[1.3vw] ml-[1.5vw] mt-[2.5vw]">TK Setia Bhakti</p>
                <p class="text-[1.1vw] ml-[2.8vw]">Tangerang, 2007 - 2009</p>
                <br>
                <p class="text-[1.3vw] ml-[1.5vw] mt-[0.5vw]">SD Setia Bhakti</p>
                <p class="text-[1.1vw] ml-[2.8vw]">Tangerang, 2009 - 2015</p>
                <br>
                <p class="text-[1.3vw] ml-[1.5vw] mt-[0.5vw]">SMP Setia Bhakti</p>
                <p class="text-[1.1vw] ml-[2.8vw]">Tangerang, 2015 - 2018</p>
                <br>
                <p class="text-[1.3vw] ml-[1.5vw] mt-[0.5vw]">SMA Setia Bhakti</p>
                <p class="text-[1.1vw] ml-[2.8vw]">Tangerang, 2018 - 2021</p>
                <br>
                <p class="text-[1.3vw] ml-[1.5vw] mt-[0.5vw]">BINUS University x PPTI BCA</p>
                <p class="text-[1.1vw] ml-[2.8vw]">Jakarta + Sentul, 2021 - now</p>
              </div>
            </div>
          </div>

          <div class="w-[23vw] h-[28vw] text-[1.1vw] mt-[13vw]">
            <h1 class="text-[1.8vw]">Useless Random Details</h1>
            <div class="mt-[1.1vw] flex flex-row items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 0 1 0-5a2.5 2.5 0 0 1 0 5z"/></svg>
              <p>Born in Jakarta </p>
            </div>
            <div class="mt-[0.3vw] flex flex-row items-center ml-[0.1vw]">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"><path fill="currentColor" d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm3.3 14.71L11 12.41V7h2v4.59l3.71 3.71l-1.42 1.41z"/></svg>
              <div class=" flex flex-row ml-[0.1vw]">
                <p>Born at Tanabata Matsuri</p>
                <p class="text-transparent">..</p>
                <p>'</p>
                <p class="font-wibu">星祭</p>
                <p>'</p>
                <p class="text-transparent">..</p>
                <p>(July 7th)</p>
              </div>
            </div>
            <div class="mt-[0.3vw] flex flex-row items-center ml-[0.1vw]">
              <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"><path fill="currentColor" d="M12 5.5A3.5 3.5 0 0 1 15.5 9a3.5 3.5 0 0 1-3.5 3.5A3.5 3.5 0 0 1 8.5 9A3.5 3.5 0 0 1 12 5.5M5 8c.56 0 1.08.15 1.53.42c-.15 1.43.27 2.85 1.13 3.96C7.16 13.34 6.16 14 5 14a3 3 0 0 1-3-3a3 3 0 0 1 3-3m14 0a3 3 0 0 1 3 3a3 3 0 0 1-3 3c-1.16 0-2.16-.66-2.66-1.62a5.536 5.536 0 0 0 1.13-3.96c.45-.27.97-.42 1.53-.42M5.5 18.25c0-2.07 2.91-3.75 6.5-3.75s6.5 1.68 6.5 3.75V20h-13v-1.75M0 20v-1.5c0-1.39 1.89-2.56 4.45-2.9c-.59.68-.95 1.62-.95 2.65V20H0m24 0h-3.5v-1.75c0-1.03-.36-1.97-.95-2.65c2.56.34 4.45 1.51 4.45 2.9V20Z"/></svg>
              <p class="ml-[0.1vw]">Family of 5</p>
            </div>
            <div class="mt-[0.3vw] flex flex-row items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 20 20"><path fill="currentColor" d="M11.9 8.4c1.3 0 2.1-1.9 2.1-3.1c0-1-.5-2.2-1.5-2.2c-1.3 0-2.1 1.9-2.1 3.1c0 1 .5 2.2 1.5 2.2zm-3.8 0c1 0 1.5-1.2 1.5-2.2C9.6 4.9 8.8 3 7.5 3C6.5 3 6 4.2 6 5.2c-.1 1.3.7 3.2 2.1 3.2zm7.4-1c-1.3 0-2.2 1.8-2.2 3.1c0 .9.4 1.8 1.3 1.8c1.3 0 2.2-1.8 2.2-3.1c0-.9-.5-1.8-1.3-1.8zm-8.7 3.1c0-1.3-1-3.1-2.2-3.1c-.9 0-1.3.9-1.3 1.8c0 1.3 1 3.1 2.2 3.1c.9 0 1.3-.9 1.3-1.8zm3.2-.2c-2 0-4.7 3.2-4.7 5.4c0 1 .7 1.3 1.5 1.3c1.2 0 2.1-.8 3.2-.8c1 0 1.9.8 3 .8c.8 0 1.7-.2 1.7-1.3c0-2.2-2.7-5.4-4.7-5.4z"/></svg>
              <p>Not owning any pet :(</p>
            </div>
            <div class="mt-[0.3vw] flex flex-row items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"><path fill="currentColor" d="M19 9.3V5c0-.55-.45-1-1-1h-1c-.55 0-1 .45-1 1v1.6l-3.33-3c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L19 9.3zm-9 .7c0-1.1.9-2 2-2s2 .9 2 2h-4z"/></svg>
              <p>Currently live in South Jakarta</p>
            </div>


            
          </div>

        </div>
      </section>
    </div>

    <div>
      <section id="skills" class="pt-[6.5vw]">
        <h1>3</h1>
      </section>
    </div>
   
    <div>
      <section id="reachMe" class="pt-[6.5vw]">
        <h1>4</h1>
      </section>
    </div>
    
  </div>
  
  
</body>
</html>