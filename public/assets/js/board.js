(function () {
  const locale = document.body.dataset.locale || "en-US";

  function updateClock() {
    const now = new Date();

    const hours = String(now.getHours()).padStart(2, "0");
    const minutes = String(now.getMinutes()).padStart(2, "0");
    const seconds = String(now.getSeconds()).padStart(2, "0");
    document.getElementById("time").innerText =
      `${hours}:${minutes}:${seconds}`;

    const options = {
      weekday: "long",
      year: "numeric",
      month: "long",
      day: "numeric",
    };

    document.getElementById("date").innerText = now.toLocaleDateString(
      locale,
      options,
    );
  }

  updateClock();
  setInterval(updateClock, 1000);
})();
