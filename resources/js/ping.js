
function measurePing(url, callback) {
    const start = performance.now();
    fetch(url, {method: 'HEAD', cache: 'no-cache'})
        .then(() => {
            const latency = performance.now() - start;
            callback(latency);
        })
        .catch(() => {
            callback(null);
        });
}

function displayLatency(latency) {
    const latencyEl = document.getElementById('latency');
    if (latency !== null) {
        latencyEl.textContent = `${latency.toFixed()}`;
    } else {
        latencyEl.textContent = 'Ping latency: Unable to measure';
    }
}

// Measure ping latency to an arbitrary endpoint (you can replace it with your own endpoint)
measurePing('http://localhost', displayLatency);

// Optional: Re-measure periodically
setInterval(() => {
    measurePing('http://localhost', displayLatency);
}, 3000); // Measure every 5 seconds
