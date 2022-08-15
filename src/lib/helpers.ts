export const servicePriceFormatted = ( price, term ) => {
    const fmt = new Intl.NumberFormat('en-CA', {
        style: 'currency',
        currency: 'USD',
    });      
    return fmt.format(price) + '/' + term;   
}