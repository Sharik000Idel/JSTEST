const addCoo = require('./js/idel')


class elem {
    constructor(id) {
        this.id = id
    }
}  

a = new elem(123);
a.id

test(
    'Первый тест корзины',  
    () => {
        expect(addCoo(new elem(id = 123))).toBe("product" + 123 + "=" + 123);
    }

);
test(
    'Второй тест корзины',  
    () => {
        expect(addCoo(new elem(id = -123))).toBe("product" + 100 + "=" + 100);
    }

);
test(
    'Трерий тест корзины',  
    () => {
        expect(addCoo(new elem(id = 32))).toBe("product" + 32 + "=" + 32);
    }

);
test(
    'Четвертый тест корзины',  
    () => {
        expect(addCoo(new elem(id = 66))).toBe("product" + 66 + "=" + 66);
    }

);