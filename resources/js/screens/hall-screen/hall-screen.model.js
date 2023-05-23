import {BaseModel} from "@/models/base.model.js";
import {useStore} from "pinia-class-store";

class HallModel extends BaseModel {
    constructor() {
        super();
        this.hall = undefined;
    }

    init(hall) {
        this.hall = hall;
    }
}

export const hallModel = useStore.bind(undefined, HallModel);
