// Get references to the HTML elements we'll need to interact with.
const inputForm = document.getElementById("input-form");
const output = document.getElementById("output");
const domainInput = document.getElementById("input");

/**
 * Parses raw WHOIS text data into a structured JavaScript object.
 * Handles duplicate keys by converting them into an array of values.
 * @param {string} text - The raw WHOIS data string.
 * @returns {object} A structured object representing the WHOIS data.
 */
const parseWhois = (text) => {
    const result = {};
    // Process each line of the text.
    text.split("\n").forEach((line) => {
        const idx = line.indexOf(": ");
        if (idx > -1) {
            const key = line.slice(0, idx).trim();
            const value = line.slice(idx + 1).trim();

            // Ignore lines that don't produce a valid key/value pair.
            if (!key || !value) {
                return;
            }

            // If the key doesn't exist yet, add it with its value.
            if (!result.hasOwnProperty(key)) {
                result[key] = value;
            }
            // If the key exists but is not an array, convert it to an array.
            else if (!Array.isArray(result[key])) {
                result[key] = [result[key], value];
            }
            // If the key is already an array, push the new value.
            else {
                result[key].push(value);
            }
        }
    });
    return result;
};

/**
 * Fetches WHOIS data from the backend server for a given domain.
 * @param {string} domain - The domain name to look up.
 */
const fetchRequest = async (domain) => {
    // Provide immediate feedback to the user.
    output.textContent = `Looking up ${domain}...`;
    
    const apiUrl = `/wp-content/themes/twentytwentyone/whois-proxy.php?domain=${encodeURIComponent(domain)}`;
    await fetch(apiUrl)
        .then((response) => response.json())
        .then((data) => {
            const parsedData = parseWhois(data);
            console.log(parsedData);
            console.log(data);

            output.innerHTML = `<pre>${data}</pre>`;
        })
        .catch((error) => {
            // Catch any errors from the fetch operation or from the error we threw.
            console.error("Fetch failed:", error);
            output.textContent = `Error: ${error.message}`;
        });
};

// Set up the event listener for the form submission.
inputForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const domain = domainInput.value.trim();

    // Proceed only if the user has entered something.
    if (domain) {
        fetchRequest(domain);
    }
});
