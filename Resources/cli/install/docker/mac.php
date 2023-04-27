<p>
    To install Docker on Mac, your computer must meet the following requirements:
</p>

<ul>
    <li>Mac hardware from 2010 or newer with an Intel processor</li>
    <li>macOS 10.14 or newer (Mojave, Catalina, or Big Sur)</li>
    <li>4GB RAM or more</li>
</ul>

<p>
    If you meet the requirements, follow these steps to install Docker on your Mac:
</p>

<ol>
    <li>If you're using a Mac with an Apple chip, run <code>softwareupdate --install-rosetta</code> in a terminal to install Rosetta 2.</li>
    <li>Download <a href="https://desktop.docker.com/mac/stable/amd64/Docker.dmg" target="_blank">Docker.dmg for Intel chips</a> or <a href="https://desktop.docker.com/mac/stable/arm64/Docker.dmg" target="_blank">Docker.dmg for Apple chips</a> depending on the chip your Mac contains.</li>
    <li>Double-click <span class="public-file-name">Docker.dmg</span> to open the installer.</li>
    <li>Drag the Docker icon to the <span class="public-directory-name">Applications</span> folder to install it.</li>
    <li>Double-click <span class="public-file-name">Docker.app</span> in the <span class="public-directory-name">Applications</span> folder to start Docker.</li>
</ol>

<?php include(DOCS_RESOURCES."/cli/install/docker/m1.html"); ?>