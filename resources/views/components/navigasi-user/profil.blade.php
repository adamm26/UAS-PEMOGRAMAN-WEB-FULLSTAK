<section class="container-profil">
    <figure></figure>
    <div>
        <span>Welcome <p>Customer</p></span>
        <span>Example@gmail.com</span>
    </div>
</section>
<style>
    .container-profil{
        height: 60%;
        display: flex;
        align-items:center;
        gap: 0.5rem;
        /* background-color:red; */
    }
    .container-profil figure{
        position: relative;
        height: 100%;
        aspect-ratio:1/1;
        /* background-color: green; */
        border :2px solid var(--border);
        border-radius: 35%;

    }
    .container-profil figure::before{
        content: '';
        position: absolute;
        height: 10px;
        aspect-ratio:1/1;
        background-color: green;
        border-radius:50%;
        bottom: 0;
        right: 0;
    }
    .container-profil span{
        display:inline-flex;
        gap:0.3rem;
        font-family: var(--font-secondary);
        color:var(--text);
        font-weight: 500;
    }
    .container-profil div{
        display: flex;
        flex-direction:column;
    }
    .container-profil div span:nth-child(2){
        font-size: 12px;
    }
</style>
