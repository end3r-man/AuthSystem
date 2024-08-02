function handleError() {
    return {
        open: false,

        init() {
            setTimeout(() => {
                this.open = true
            }, 300);

            setTimeout(() => {
                this.open = false
            }, 1600);
        }
    }
}