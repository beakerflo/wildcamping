<footer class="container mx-auto border-t flex flex-col md:flex-row space-x-12 border-florange mt-20 py-10 justify-evenly">
    <ul class="flex justify-evenly items-end md:items-center space-x-0 md:space-x-12 space-y-4 md:space-y-0">
        <li class="text-florange-light text-xs">&copy; 2020 <span class="text-floblack">Enter</span><span class="text-blue-700 italic">MI</span></li>
        <x-footerItem route="pages.privacy" item="Privacy" />
        <x-footerItem route="pages.security" item="Security" />
    </ul>
        <x-logo class="hidden md:block"/>
    <ul class="flex justify-evenly items-end md:items-center space-x-0 md:space-x-12 space-y-4 md:space-y-0">
        <x-footerItem route="pages.contact" item="Contact" />
        <x-footerItem route="pages.home" item="API" />
        <x-footerItem route="pages.contact" item="Contact" />
    </ul>
</footer>
