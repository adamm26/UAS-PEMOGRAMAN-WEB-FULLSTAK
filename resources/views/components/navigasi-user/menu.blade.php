<section class="container-menu">
    <span class="menu-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <circle cx="5" cy="12" r="2" />
            <circle cx="12" cy="12" r="2" />
            <circle cx="19" cy="12" r="2" />
        </svg>
    </span>

    <div class="menu-dropdown">
        <ul>
            <li>
                <a href="">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21a8 8 0 0 0-16 0"></path>
                            <circle cx="12" cy="8" r="4"></circle>
                        </svg>
                    </span>
                    <span>Profil</span>
                </a>
                <a href="">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 3h6"></path>
                            <path d="M10 17l2 2 4-4"></path>
                            <rect x="5" y="3" width="14" height="18" rx="2"></rect>
                        </svg>
                    </span>
                    <span>Status Pengajuan</span>
                </a>
                <a href="">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                            <polyline points="16 17 21 12 16 7" />
                            <line x1="21" y1="12" x2="9" y2="12" />
                        </svg>
                    </span>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</section>

<style>
    .container-menu {
        position: relative;
        display: flex;
        align-items: center;
    }

    /* Tombol tiga titik */
    .menu-button {
        width: 2.5rem;
        height: 2.5rem;
        display: flex;
        justify-content: center;
        align-items: center;
        color: var(--accent);
        border-radius: 50%;
        cursor: pointer;
        transition: .3s;
    }

    .menu-button svg {
        width: 1.5rem;
    }

    .menu-button:hover {
        background: rgba(0, 0, 0, .05);
    }

    /* Dropdown */
    .menu-dropdown {
        position: absolute;
        top: calc(100% + 15px);
        right: 0;
        min-width: 220px;
        background: var(--base);
        border: 1px solid var(--border);
        border-radius: 15px;
        overflow: hidden;
        box-shadow:
            0 10px 25px rgba(0, 0, 0, .12);
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: .25s ease;
    }



    .menu-dropdown ul {
        list-style: none;
        padding: 8px 0;
    }

    .menu-dropdown li {
        width: 100%;
        padding: 0.5rem
    }

    .menu-dropdown a {
        display: flex;
        align-items: center;
        padding: 5px 20px;
        color: var(--text);
        text-decoration: none;
        font-size: .95rem;
        transition: .2s;
        border-radius: 10px;
        gap: 3px;
        font-family: var(--font-primary);
        font-weight: 900;

    }

    .menu-dropdown a span:nth-child(1) {
        display: inline-flex;
        height: 2rem;
        aspect-ratio: 1/1;
        padding: 3px;
        /* background-color:red; */
    }

    .menu-dropdown a:hover {
        background: var(--secondary);
        color: var(--base);
    }

    /* Tampilkan menu saat hover */
    .container-menu:hover .menu-dropdown {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
</style>
