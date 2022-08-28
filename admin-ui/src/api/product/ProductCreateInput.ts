import { OrderCreateNestedManyWithoutProductsInput } from "./OrderCreateNestedManyWithoutProductsInput";

export type ProductCreateInput = {
  description?: string | null;
  image?: string | null;
  itemPrice?: number | null;
  name?: string | null;
  orders?: OrderCreateNestedManyWithoutProductsInput;
};
