if (! localStorage.getItem('theme')) {
    localStorage.setItem("theme", "day");
}

if (localStorage.getItem('theme') == 'day') {
    document.getElementById('moon').className = 'bi bi-moon';
    document.querySelector('body').className = 'day';
    document.getElementById('main').classList.add('night');
} else {
    document.getElementById('moon').className = 'bi bi-sun';
    document.querySelector('body').className = 'night';
    document.getElementById('main').classList.add('night');
}

document.getElementById('theme').addEventListener('click', switchTheme);

function switchTheme () {
    if (localStorage.getItem('theme') == 'day') {
        document.querySelector('body').style.setProperty('transition', 'all, .3s')
        document.querySelector('body').style.setProperty('transition-delay', '.3s')
        document.getElementById('moon').className = 'bi bi-sun';
        document.getElementById('main').classList.add('night');
        document.getElementById('main').classList.remove('day');
        document.querySelector('body').className = 'night';
        localStorage.setItem('theme', 'night');
    } else {
        document.querySelector('body').style.setProperty('transition', 'all, .3s')
        document.querySelector('body').style.setProperty('transition-delay', '.3s')
        document.getElementById('moon').className = 'bi bi-moon';
        document.getElementById('main').classList.add('day');
        document.getElementById('main').classList.remove('night');
        document.querySelector('body').className = 'day';
        localStorage.setItem('theme', 'day');
        console.log('Second Case ' + document.getElementById('moon').className);
    }
}