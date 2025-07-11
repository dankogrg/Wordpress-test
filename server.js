const express = require("express");
const whois = require("whois");
const cors = require("cors");

const app = express();
const PORT = 3000;

app.use(cors({ origin: "*" }));

app.get("/", (req, res) => {
    const domain = req.query.domain;
    if (!domain) {
        return res.status(400).send("Domain is required.");
    }

    whois.lookup(domain, (err, data) => {
        if (err) {
            return res.status(500).send(`WHOIS lookup failed: ${err.message}`);
        }
        // Send the raw WHOIS data as plain text.

        res.json(data);
    });
});

app.listen(PORT, () => {
    console.log(`Listening at ${PORT}`);
});
