import { on } from "events";

type Field = {
    key: string;
    label: string;
    required?: boolean;

};

export function DynamicFields({
    fields,
    values,
    onChange,
}: {
    fields: Field[];
    values: Record<string, string>;
    onChange: (key: string, value: string) => void;
}) {
    return (
        <>
          {fields.map(field=>(
            <div key ={field.key}>
                <label>{field.label}</label>

                <input value={values[field.key] ?? ''} 
                onChange={e => onChange(field.key, e.target.value)}
                />
            </div>
          ))}
        </>
    );
}