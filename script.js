
document.querySelectorAll('.accordion a').forEach(function(anchor) {
    anchor.addEventListener('click', function() {
        // Tutup panel lainnya
        document.querySelectorAll('.accordion .panel').forEach(function(panel) {
            if (panel !== anchor.nextElementSibling) {
                panel.style.display = 'none';
            }
        });

        // Toggle panel yang diklik
        var panel = anchor.nextElementSibling;
        if (panel.style.display === 'block') {
            panel.style.display = 'none';
        } else {
            panel.style.display = 'block';
        }
    });
});

