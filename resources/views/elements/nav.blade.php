<nav class="nav">
    <div class="nav__hamburger">
        <svg width="50" height="50" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_70_170)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 11.9531C0 11.3191 0.251869 10.711 0.700198 10.2627C1.14853 9.81437 1.75659 9.5625 2.39062 9.5625H48.6094C49.2434 9.5625 49.8515 9.81437 50.2998 10.2627C50.7481 10.711 51 11.3191 51 11.9531C51 12.5872 50.7481 13.1952 50.2998 13.6436C49.8515 14.0919 49.2434 14.3437 48.6094 14.3438H2.39062C1.75659 14.3437 1.14853 14.0919 0.700198 13.6436C0.251869 13.1952 0 12.5872 0 11.9531ZM0 25.5C0 24.866 0.251869 24.2579 0.700198 23.8096C1.14853 23.3612 1.75659 23.1094 2.39062 23.1094H48.6094C49.2434 23.1094 49.8515 23.3612 50.2998 23.8096C50.7481 24.2579 51 24.866 51 25.5C51 26.134 50.7481 26.7421 50.2998 27.1904C49.8515 27.6388 49.2434 27.8906 48.6094 27.8906H2.39062C1.75659 27.8906 1.14853 27.6388 0.700198 27.1904C0.251869 26.7421 0 26.134 0 25.5ZM2.39062 36.6562C1.75659 36.6562 1.14853 36.9081 0.700198 37.3564C0.251869 37.8048 0 38.4128 0 39.0469C0 39.6809 0.251869 40.289 0.700198 40.7373C1.14853 41.1856 1.75659 41.4375 2.39062 41.4375H48.6094C49.2434 41.4375 49.8515 41.1856 50.2998 40.7373C50.7481 40.289 51 39.6809 51 39.0469C51 38.4128 50.7481 37.8048 50.2998 37.3564C49.8515 36.9081 49.2434 36.6562 48.6094 36.6562H2.39062Z"
                    fill="#848484" />
            </g>
            <defs>
                <clipPath id="clip0_70_170">
                    <rect width="51" height="51" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </div>
    <div class="nav__user-info">
        <div class="nav__user-photo-wrapper">
            <img class="nav__user-photo"
                src="https://ui-avatars.com/api/?background=1A8FFF&color=fff&name={{Auth::user()->name}}&length=1$font-size=1"
                alt="">
        </div>
        <div class="nav__user-login">
            <h2 class="nav__user-email">{{ Auth::user()->email }}</h2>
            <h5 class="nav__user-name">{{ Auth::user()->name }}</h5>
        </div>
    </div>
</nav>
